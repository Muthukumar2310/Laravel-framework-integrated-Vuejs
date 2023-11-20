import './bootstrap';
import Vue from 'vue';
import { createApp } from 'vue';
import { computed } from 'vue';

import dayGridPlugin from '@fullcalendar/daygrid';
import timeGridPlugin from '@fullcalendar/timegrid';
import listPlugin from '@fullcalendar/list';
import interactionPlugin from '@fullcalendar/interaction';
import resourceTimelinePlugin from '@fullcalendar/resource-timeline';
import FullCalendar from '@fullcalendar/vue3';


const app = createApp({
    data() {
        return {
            users: [],
            first_name: '',
            last_name: '',
            email: '',
            password: '',
            editingUserId: null,
            activeColor: 'red', // Default color
            fontSize: '25px',
            isCalendarVisible: false,
        };
    },
    mounted(){
        this.loadUserDetails();
    },
    computed: {
        styleObject() {
            return {
                color: this.activeColor,
                fontSize: this.fontSize,
            };
        },
    },
    methods: {
        showCalendar() {
            this.isCalendarVisible = true;
        },
        loadUserDetails(){
            axios.get('dashboard/getUserDetails')
            .then(response =>{
                this.users = response.data;
                // console.log(this.users);
            })
            .catch(error =>{
                console.error(error);
            });
        },
        changeTextColor(event) {
            this.activeColor = event.target.value; // Update the selected color
        },
        
        editUser(userId) {
            console.log("Edit user with ID: " + userId);

            this.editingUserId = userId; // Set the editingUserId
            const user = this.users.find(user => user.id === userId);
            this.first_name = user.first_name;
            this.last_name = user.last_name;
            this.email = user.email;

            $('#editUserModal').modal('show'); 
        },
        handleImageUpload(event) {
            // Handle the image file upload here
            const file = event.target.files[0];
            this.profile_image = file;
        },
        saveUserChanges() {
            const userId = this.editingUserId;
            const formData = new FormData();
            formData.append('id', userId);
            formData.append('first_name', this.first_name);
            formData.append('last_name', this.last_name);
            formData.append('email', this.email);
            formData.append('password', this.password);
            formData.append('profileImage', this.profile_image);
            formData.append('_method','PUT');
            axios.post('dashboard/editUser', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data',
                    },
                })
                .then((response) => {
                    const userIndex = this.users.findIndex((user) => user.id === userId);
                    if (userIndex !== -1) {
                        this.users[userIndex].first_name = this.first_name;
                        this.users[userIndex].last_name = this.last_name;
                        this.users[userIndex].email = this.email;
                        this.users[userIndex].profileImage = this.profile_image;
                    }
                    $('#editUserModal').modal('hide');

                    this.first_name = '';
                    this.last_name = '';
                    this.email = '';
                    this.password = '';
                })
                .catch((error) => {
                    console.error(error);
                });
            this.loadUserDetails();
        },
        deleteUser(userId) {
            console.log("Delete user with ID: " + userId);
            axios.delete("dashboard/deleteUser", {
                data: {
                    id: userId,
                    
                },
            })
            .then(response => {
                // Remove the deleted user from the users array
                const index = this.users.findIndex(user => user.id === userId);
                if (index > -1) {
                    this.users.splice(index, 1);
                }

            })
            .catch(error => {
                console.error(error);
            });
        },
    },
});
app.mount('#app');
app.component('FullCalendar', FullCalendar);

