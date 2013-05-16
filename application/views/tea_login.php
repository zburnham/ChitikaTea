<div id="loggedin">
    <?php if (TRUE === $status) {
        echo '<a href="' . base_url('logout') . '">Logout</a>';
    } else {
        echo '<a href="' . base_url('login') . '">Login</a>';
    }
    ?>
</div>

</div>
