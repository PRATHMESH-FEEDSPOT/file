<?php
header("Content-Type: application/rss+xml; charset=ISO-8859-1");

echo '<?xml version="1.0" encoding="UTF-8" ?>';
?>
<rss version="2.0">
    <channel>
        <title>Your Project Title</title>
        <link>http://www.yourwebsite.com/</link>
        <description>Description of your project</description>
        <language>en-us</language>
        <lastBuildDate><?php echo date(DATE_RSS); ?></lastBuildDate>
        
        <?php
        // Example items array
        $items = [
            [
                'title' => 'First Item Title',
                'link' => 'http://www.yourwebsite.com/first-item',
                'description' => 'Description of the first item',
                'pubDate' => '2024-07-01'
            ],
            [
                'title' => 'Second Item Title',
                'link' => 'http://www.yourwebsite.com/second-item',
                'description' => 'Description of the second item',
                'pubDate' => '2024-07-02'
            ],
            // Add more items as needed
        ];
        
        foreach ($items as $item) {
            echo '<item>';
            echo '<title>' . htmlspecialchars($item['title']) . '</title>';
            echo '<link>' . htmlspecialchars($item['link']) . '</link>';
            echo '<description>' . htmlspecialchars($item['description']) . '</description>';
            echo '<pubDate>' . date(DATE_RSS, strtotime($item['pubDate'])) . '</pubDate>';
            echo '</item>';
        }
        ?>
        
    </channel>
</rss>
