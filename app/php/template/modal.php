<div class="modal fade style-modal" id="ModalFeedback" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="header-modal-feedback">
        <span>Обратный звонок</span>
        <button type="button" data-dismiss="modal">
          <i class="fas fa-times"></i>
        </button>
      </div>
      <div class="body-modal-feedback">
        <form method="POST" action="/mail.php">
            <input type="text" name="name" placeholder="Имя" required>
            <input type="email" name="mail" placeholder="Email" required>
            <input name="phone" type="tel" style="position: absolute; z-index: -90;"/>
            <input name="phoneon" type="tel" placeholder="Телефон"/>
            <button type="submit">ОТПРАВИТЬ</button>
          </form>
      </div>
    </div>
  </div>
</div>
