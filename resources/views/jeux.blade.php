<html>
<head>
    <!-- Include the HTML5 API files -->
    <script type="text/javascript" src="//cdn.gameplayer.io/api/js/game.js"></script>
    <script type="text/javascript" src="//cdn.gameplayer.io/api/js/developer.js"></script>
<head>
<body>

    <!-- your game code -->


    <!-- declare the 'SpilData' object and the app ID property -->
    <script type="text/javascript">
    var SpilData = {
        id: '576742227280291016' // Replace with the value you receive from Spil Games
    };

    <!-- Initialise the Spil HTML5 API -->
    GameAPI.loadAPI (function (apiInstance) {
        // The API is ready for use.
        if (window.console && window.console.log) {
            console.log('GameAPI version ' + apiInstance.version + ' loaded!');
        }
    }, SpilData);
    </script>
</body>
</html>
