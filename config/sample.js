// Import the functions you need from the SDKs you need
                   
                    // TODO: Add SDKs for Firebase products that you want to use
                    // https://firebase.google.com/docs/web/setup#available-libraries

                    // Your web app's Firebase configuration
                    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
                    const firebaseConfig = {
                        apiKey: "AIzaSyBqVSKBuERlMgAc0LxXVhm_586mc-BXOt0",
                        authDomain: "laravel-6c7bd.firebaseapp.com",
                        databaseURL: "https://laravel-6c7bd-default-rtdb.firebaseio.com",
                        projectId: "laravel-6c7bd",
                        storageBucket: "laravel-6c7bd.appspot.com",
                        messagingSenderId: "14696284098",
                        appId: "1:14696284098:web:327a3251036271804d605b",
                        measurementId: "G-31R7LLX8KK"
                    };

                    // Initialize Firebase
                    const app = initializeApp(firebaseConfig);
                    const analytics = getAnalytics(app);
                    const messagesRef = database.ref('messages');

                    const messageList = document.getElementById('message-list');
                    const messageInput = document.getElementById('message-input');
                    const sendButton = document.getElementById('send-button');

                    // Function to display a message in the chat interface
                    function displayMessage(message) {
                        const li = document.createElement('li');
                        li.textContent = message.text;
                        messageList.appendChild(li);
                    }

                    // Function to send a message to Firebase
                    function sendMessage() {
                        const text = messageInput.value;
                        messagesRef.push({ text });
                        messageInput.value = '';
                    }

                    // Listen for new messages and display them in real-time
                    messagesRef.on('child_added', (snapshot) => {
                        const message = snapshot.val();
                        displayMessage(message);
                    });

                    // Send a message when the "Send" button is clicked
                    sendButton.addEventListener('click', () => {
                        sendMessage();
                    });

                    // Send a message when Enter key is pressed
                    messageInput.addEventListener('keyup', (event) => {
                        if (event.key === 'Enter') {
                            sendMessage();
                        }
                    });
                    