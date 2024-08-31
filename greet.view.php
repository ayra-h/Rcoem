<!DOCTYPE html>
<html data-theme="dark">
<head>
    <title>Greet User</title>
    <link rel="stylesheet" href="/pico.min.css">
</head>
<body>
    <main class="container">
        <form method="post" >

            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>

            <label>Your favorite food:</label>
            <input type="radio" name="food" id="pulao" value="pulao" required>
            <label for="pulao">Pulao</label><br>

            <input type="radio" name="food" id="pasta" value="Pasta">
            <label for="pasta">Pasta</label><br>

            <input type="radio" name="food" id="biryani" value="Biryani">
            <label for="biryani">Biryani</label><br>

        
            <input type="hidden" name="current_time" id="current_time">

            <input type="submit" value="Submit">
        </form>
    </main>

    <script>
        const now = new Date();
        const hours = now.getHours();
        document.getElementById('current_time').value = hours;
    </script>
</body>
</html>
