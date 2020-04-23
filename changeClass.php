<script>
    document.getElementById("logged").onload = function () {
        changeClass();
    };

    function changeClass() {
        var sessionName = '<?php echo $_SESSION['username'] ?>';
        if (sessionName === '') {
            document.getElementById("logged").classList.add('loggedOut');
            document.getElementById("logged").classList.remove('loggedIn');
        } else {
            var element = document.getElementById("logged");
            element.classList.add("loggedIn");
            element.classList.remove("loggedOut");
        }
    }
    ;
</script>

