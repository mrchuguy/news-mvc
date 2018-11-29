<h1>ALL NEWS</h1>
<div class="news">
    <?php foreach ($this->data as $news_item):?>
        <table>
            <tr>
                <td class="title"><?= $news_item['title'] ?></td>
                <td class="date"><?= date('d.m.y H:i' ,$news_item['date']) ?></td>
            </tr>
            <tr>
                <td colspan="2"><?= $news_item['text'] ?></td>
            </tr>
        </table>
    <?php endforeach;?>
</div>