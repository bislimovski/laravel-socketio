<!DOCTYPE html>
<html>
    <head>
        <title>Broadcast Events</title>
        <script type="text/javascript" src="/js/vue.js"></script>
    </head>
    <body>
    <h1>Broadcast Events</h1>

    <ul>
        <li v-repeat="user: users">
            @{{user.name}}
        </li>
    </ul>
    
    <script src="/js/socket.js"></script>
    <script type="text/javascript">

        var app = new Vue({

            el: 'body',

            ready: function() {
                self = this;

                var socket = io('http://localhost:3000');

                socket.on('user-channel:UserRegistered', functon(message){

                    });
                    console.log(message);
                    self.users.push(message.user);
                },

            data: {
                users:[
                    {name: 'Taylor', age: 28}
                ]
            },

            methods:{

            }
        });
        </script>
    </body>
</html>
