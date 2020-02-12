<html>

<head>
    <script>
        function getMobileOperatingSystem() {
            var userAgent = navigator.userAgent || navigator.vendor || window.opera;

            if (/android/i.test(userAgent)) {
                console.log('and');

                return "Android";
            }

            if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
                console.log('ios');
                return "iOS";
            }
            console.log('test');


            return "unknown";
        }


        DetectAndServe = () => {
            const os = this.getMobileOperatingSystem();
            if (os === 'Android') {
                window.location.href = 'https://play.google.com/store/apps/details?id=com.cardose.doctor_app';
            } else if (os === 'iOS') {
                // window.location.href = 'http://www.caredose.com';
                window.location.href = 'https://apps.apple.com/in/app/doctors-portal-for-caredose/id1484107816';
            } else {
                window.location.href = 'http://www.caredose.com';
            }
        }
    </script>
</head>

<body onload="DetectAndServe()">
	<h1>Doctor app redirect</h1>
</body>

</html>