<?php
	include 'partials/navbar.php';
?>

<div class="container">
<form action="">
    <img src="edohublogo.png" alt="" width="150px">
    <div>
        <input 
            type="text" 
            name="firstname" 
            placeholder="firstname"
        >
    </div>
    <div>
        <input 
            type="text" 
            name="surname" 
            placeholder="surname"
        >
    </div>
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
            Already have an account? <a href="/edojobsauthproject/signin.php">Sign In</a>
        </small>
    </section>
</form>
</div>

<?php
	include 'partials/footer.php';
?>