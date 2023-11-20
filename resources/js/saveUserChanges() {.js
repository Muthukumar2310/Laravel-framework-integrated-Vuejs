saveUserChanges() {
                        const userId = this.editingUserId;

                        const formData = new FormData();
                        formData.append('id', userId);
                        formData.append('first_name', this.first_name);
                        formData.append('last_name', this.last_name);
                        formData.append('email', this.email);
                        formData.append('password', this.password);

                        // Get the selected image file
                        const profileImage = document.getElementById('profile_image').files[0];
                        if (profileImage) {
                            formData.append('profile_image', profileImage);
                        }

                        axios.put("{{ route('editUser') }}", formData, {
                            headers: {
                                'Content-Type': 'multipart/form-data',
                            },
                        })
                        .then(response => {
                            const userIndex = this.users.findIndex(user => user.id === userId);
                            if (userIndex !== -1) {
                                this.users[userIndex].first_name = this.first_name;
                                this.users[userIndex].last_name = this.last_name;
                                this.users[userIndex].email = this.email;
                            }
                            $('#editUserModal').modal('hide');

                            this.first_name = '';
                            this.last_name = '';
                            this.email = '';
                            this.password = '';

                            // Reload user details
                            this.loadUserDetails();
                        })
                        .catch(error => {
                            console.error(error);
                        });
                    },