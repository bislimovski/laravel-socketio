<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <style type="text/javascript">

        ready: function() {
            self = this;

            var socket = io('http://localhost:3000');

            socket.on('user-channel:UserRegistered', functon(message){

                });
                console.log(message);
                self.users.push(message.user);
            },

            data:{
                users:[
                    {name: 'Taylor', age: 28}
                ]
            },

            methods:{
                
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
        </div>
    </body>
</html>
