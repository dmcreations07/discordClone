<div class="popup" id="popup-1">
  <div class="content">
    <div class="close-btn" onclick="togglePopup()">×</div>

    <h1>Login</h1>
    <div class="input-field">
      <input placeholder="Email" type="email" class="validate" required />
    </div>
    <div class="input-field">
      <input placeholder="Password" type="password" class="validate" required />
    </div>
    <button type="submit" value="submit" class="second-button">Login</button>
    <p id="noacc">Don't have an account? <a href="#">Create Now!</a></p>
  </div>
</div>
<script>
  function togglePopup() {
    document.getElementById("popup-1").classList.toggle("active");
  }
</script>