<div id="sb-list" class="postbox" style="max-width: 800px; margin-top: 20px;">
  <h2 class="hndle"><?php _e( 'デモ', THEME_NAME ) ?></h2>

  <div class="inside balloon-content">
    <div class="demo">
    <?php
      generate_speech_balloon_tag(
        $record,
        'VOICE'
      );
    ?>
    </div>

  </div>
  <?php if (is_icon_irasutoya($record)): ?>
  <div class="balloon-demo-credit">
    <?php _e( 'このアイコンは「いらすとや」さんの許可の下、当テーマのCDNサーバで配信中のデモです。アクセスが増えると、表示されなくなる可能性もあるので、自前で画像を用意するか、「<a href="http://www.irasutoya.com/" target="_blank">いらすとや</a>」さんの豊富なイラストの中から好みのアイコンを探すなどして、自サーバーにアップして利用することをおすすめします。アクセス集中によりCDN上の画像が表示されなくなっても保証はできませんのでご了承ください。', THEME_NAME ) ?>
  </div>
  <?php endif ?>
</div>