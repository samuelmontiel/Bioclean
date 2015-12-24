  <br><br>
  <div class="about-area">
      <div id="message-details" class="message-details">
      <div class="container">
        <form action="email.php" method="post" id="myForm" class="message-form">
          <div class="row">
            <div class="col-sm-6">
              <input id="author" class="form-control" name="author" type="text" value="" size="30" aria-required="true" placeholder="Name*" title="Name" required>
              <input id="email" class="form-control" name="email" type="email" value="" size="30" aria-required="true" placeholder="Email*" title="Email"  required>
              <input id="subject" class="form-control" name="subject" type="subject" value="" size="30" aria-required="true" placeholder="Subject*" title="Subject"  required>
            </div>
            <div class="col-sm-6">
              <textarea id="message" class="form-control" name="message" cols="45" rows="3" aria-required="true" placeholder="Message" title="Message"  required></textarea>
              <button name="submit" class="btn btn-lg full-width" type="submit" id="submit">Submit</button>
            </div>
          </div><!-- /.row -->
        </form><!-- /#commentform -->
      </div><!-- /.container -->
    </div><!-- /.message-details -->
    </div>
    <br><br><br><br><br>