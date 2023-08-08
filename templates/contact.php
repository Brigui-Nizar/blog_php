<p>Vous souhaitez m'envoyer un message?</p>
<form name="sentMessage" id="contactForm" novalidate>
  <div class="control-group">
    <div class="form-group floating-label-form-group controls">
      <label>Nom</label>
      <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Merci de renseigner votre nom" />
      <p class="help-block text-danger"></p>
    </div>
  </div>
  <div class="control-group">
    <div class="form-group floating-label-form-group controls">
      <label>Email</label>
      <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Une addresse email est requis" />
      <p class="help-block text-danger"></p>
    </div>
  </div>
  <div class="control-group">
    <div class="form-group col-xs-12 floating-label-form-group controls">
      <label>Téléphone</label>
      <input type="tel" class="form-control" placeholder="Phone Number" id="phone" />
      <p class="help-block text-danger"></p>
    </div>
  </div>
  <div class="control-group">
    <div class="form-group floating-label-form-group controls">
      <label>Message</label>
      <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Ecrivez moi."></textarea>
      <p class="help-block text-danger"></p>
    </div>
  </div>
  <br />
  <div id="success"></div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary" id="sendMessageButton">
      Envoyer
    </button>
  </div>
</form>