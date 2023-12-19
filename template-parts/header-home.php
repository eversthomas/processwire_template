<header>
    <h1>
        <?php echo $page->title; // headline ?> home header
    </h1>
    <?php if($pages(1017)->site_logo) echo "<img src='{$pages(1017)->site_logo->url}' alt='{$pages(1017)->site_logo->description}' width='460' height='179'>"; ?>
</header>