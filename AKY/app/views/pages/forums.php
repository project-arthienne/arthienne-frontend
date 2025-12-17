<?php require '../AKY/app/views/layouts/header.php'; ?>

<div class="page-wrapper">

    <h1 class="page-title">Discussion Forums</h1>

    <p class="page-subtitle">
        Exchange perspectives, share your honest opinions, and explore the full spectrum of views on the subjects that spark your interest.
    </p>

    <?php
    $forums = [ //hard coded for now, would change soon
        'Contemporary Art And Culture',
        'Digital Art And Nft Discourse',
        'Auction Market Trends And Insights',
        'Emerging Artists And New Voices',
        'Sculpture Materials And Techniques',
        'Abstract Expression And Meaning',
        'Art Collecting For Beginners',
        'Exhibition Reviews And Critiques',
        'The Role Of Ai In Art',
        'Preservation And Restoration Methods',
        'Photography As Fine Art',
        'Minimalism And Visual Silence'
    ];
    ?>

    <div class="forum-grid">
        <?php foreach ($forums as $title): ?>
            <div class="forum-card">
                <h3 class="card-title"><?= $title ?></h3>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="pagination">
        <button class="page-btn">«</button>
        <button class="page-btn">‹</button>
        <div class="page-current">1</div>
        <button class="page-btn">›</button>
        <button class="page-btn">»</button>
    </div>

</div>

<?php require '../AKY/app/views/layouts/footer.php'; ?>
