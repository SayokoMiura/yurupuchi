<?php
//ヘッダー部分（<head></head>内）にタグを挿入したいときは、このテンプレートに挿入（ヘッダーに挿入する解析タグなど）
//子テーマのカスタマイズ部分を最小限に抑えたい場合に有効なテンプレートとなります。
//例：<script type="text/javascript">解析コード</script>
?>
<?php if (!is_user_administrator()) :
//管理者以外カウントしたくない場合は
//↓ここに挿入?>

<?php endif; ?>
<?php //ログインユーザーも含めてカウントする場合は以下に挿入 ?>

<?php //↓大西のテスト start ?>
<link href="<?php echo get_template_directory_uri(); ?>/cstm/css/test01.css" rel="stylesheet" media="all">
<?php //↑大西のテスト end ?>
