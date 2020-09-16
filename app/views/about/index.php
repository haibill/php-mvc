<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent">
            <li class="breadcrumb-item active" aria-current="page">About</li>
        </ol>
    </nav>
</div>
<div class="container mt-4">
    <h1>About Me</h1>
    <img src="<?= BASEURL ?>/img/billy.jpeg" alt="Profile Picture" width="200" class="rounded-circle shadow">
    <?php echo "<p>My Name is " . $data['name'] . ", I am " . $data['age'] . " years old, and My job is " . $data['job'] . "</p>"  ?>
</div>
