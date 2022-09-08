<?php 
if(!isset($_SESSION['admin-id'])){
    header ('Location: ../login-first');
    exit;
}
?>
<footer class="footer">
    <div class="container-fluid">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="../index.php">
                        Home
                    </a>
                </li>
                <li>
                    <a href="../products.php">
                        Products
                    </a>
                </li>
                <li>
                    <a href="../contact.php">
                        Contact
                    </a>
                </li>
                <li>
                    <a href="http://localhost/bim/FlowersNepal/user/forum.php">
                        Forum
                    </a>
                </li>
            </ul>
        </nav>
        <p class="copyright pull-right">
            &copy; <script>document.write(new Date().getFullYear())</script> Flowers Nepal
        </p>
    </div>
</footer>