<?php
	include 'partials/navbar.php';
?>

<div class="container">
    <form action="">
    <img src="edohublogo.png" alt="" width="150px">
    <div>
        <input 
            type="email" 
            name="email" 
            placeholder="email"
        >
    </div>
    <div>
        <input 
            type="password" 
            name="password" 
            placeholder="password"
        >
    </div>
    <div>
        <button>Sign In</button>
    </div>
    <section>
        <small>
            New Here? <a href="/edojobsauthproject/signup.php">Sign Up</a>
        </small>
    </section>
</form>
</div>

<?php
	include 'partials/footer.php';
?>