<?php

/**
 * This file show toaster at particular time intervals
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toaster | Time Intervals</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <style>
        #toast-container > .toast {
            background-image: none !important;
        }
    </style>
</head>
<body>
    <div id="root">This is the toaster</div>
    <script>
        var data = {
            17: {
                name: "Vishakha",
                country: "Australia",
                time: "01:10pm"
            },
            10: {
                name: "Amit",
                country: "Canada",
                time: "12:10pm"
            },
            20: {
                name: "Jaspreet",
                country: "USA",
                time: "12:30pm"
            },
            30: {
                name: "Maan",
                country: "India",
                time: "12:40pm"
            },
            40: {
                name: "Satya",
                country: "Uganda",
                time: "12:50pm"
            },
            50: {
                name: "Gurpreet",
                country: "New Zealand",
                time: "01:00pm"
            }
        };

        jQuery(document).ready( function() {
            var myVar = setInterval(myTimer, 5000); // run for 59 seconds
        });

        function myTimer()
        {
            // get minutes
            let minute = new Date().getMinutes();

            // compare key of data with minute
            if(minute in data) {
                let message = "Name: "+data[minute].name+"<br/>"+"Country: "+data[minute].country+"<br/>"+"Time: "+new Date().toLocaleTimeString();
                toastr["success"](message);
                toastr.options = {
                    "closeButton": true,
                    // "debug": false,
                    // "newestOnTop": false,
                    // "progressBar": false,
                    // "positionClass": "toast-top-right",
                    // "preventDuplicates": false,
                    // "onclick": null,
                    "showDuration": "100",
                    "hideDuration": "2000",
                    "timeOut": "2000"
                    // "extendedTimeOut": "1000",
                    // "showEasing": "swing",
                    // "hideEasing": "linear",
                    // "showMethod": "fadeIn",
                    // "hideMethod": "fadeOut"
                }
            }
        }
    </script>
</body>
</html>