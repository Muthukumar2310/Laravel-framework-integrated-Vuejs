 if(childData.message(/^[a-zA-Z0-9_\.\-]+\@([a-zA-Z0-9\-]+\.)+[a-zA-Z0-9]{2,4}$/) != -1 && childData.message(/^[0-9\-\(\)\ ]+$/) != -1){
                                    error = 'Your message should contain an censor.';
                                    $('#viewChat').append('<p>'+childData.username + ': '+ error + '</p>');
                                }




                                var emailRegex = /^[a-zA-Z0-9_\.\-]+\@([a-zA-Z0-9\-]+\.)+[a-zA-Z0-9]{2,4}$/;
                                var mobileRegex = /^[0-9\-\(\)\ ]+$/;
                                
                                if (emailRegex.test(childData.message) || mobileRegex.test(childData.message)) {
                                    var error = 'Your message an censor.';
                                    $('#viewChat').append('<p>' + childData.username + ': ' + error + '</p>');
                                } else {
                                    $('#viewChat').append('<p>' + childData.username + ': ' + childData.message + '</p>');
                                }
                                $('#chat').val('');


                                $('#send').on('click', function () {
                                    var userId = "{{ Auth()->user()->id }}";
                                    var email = "{{ Auth()->user()->email }}";
                                    var name = "User1";
                                    var message = $('#chat').val();
                                    var fileInput = document.getElementById('file');
                                    var selectedFile = fileInput.files[0];

                                    var fileId = Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
                                    var storageRef = firebase.storage().ref('files/' + userId + '/' + fileId);
                                    var uploadTask = storageRef.put(selectedFile);
                                    uploadTask.on('state_changed', function (snapshot) {
                                        console.log('Successfully Uploaded the File');    
                                        }, 
                                        function (error) {
                                            console.error('Error uploading file:', error);
                                        },
                                        function () {
                                            
                                            uploadTask.snapshot.ref.getDownloadURL().then(function (downloadURL) {
                                                
                                                var postListRef = firebase.database().ref('message/' + userId);
                                                var newPostRef = postListRef.push();
                                                newPostRef.set({
                                                    'userId': userId,
                                                    'username': name,
                                                    'email': email,
                                                    'message': message,
                                                    'fileUrl': downloadURL, 
                                                });

                                                
                                                var ref = firebase.database().ref('message/' + userId);
                                                ref.once('value', (snapshot) => {
                                                    snapshot.forEach((childSnapshot) => {
                                                        var childKey = childSnapshot.key;
                                                        var childData = childSnapshot.val();
                                                        console.log(childData);
                                                        
                                                        var emailRegex = /^[a-zA-Z0-9_\.\-]+\@([a-zA-Z0-9\-]+\.)+[a-zA-Z0-9]{2,4}$/;
                                                        var mobileRegex = /^[0-9\-\(\)\ ]+$/;
                                                        
                                                        if (emailRegex.test(childData.message) || mobileRegex.test(childData.message)) {
                                                            var error = 'Your message an censor.';
                                                            $('#viewChat').append('<p>' + childData.username + ' : ' + error + '</p>');
                                                        } else {
                                                            if(childData.File){
                                                                $('#viewChat').append('<p>' + childData.username + ' : ' + childData.File + '</p>');
                                                            }else{
                                                                $('#viewChat').append('<p>' + childData.username + ' : ' + childData.message + '</p>');
                                                            }
                                                        }
                        
                                                        $('#chat').val('');
                                                    });
                                                });
                                                $('#chat').val('');
                                            });
                                        });
                                    });
