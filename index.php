<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Profile</title>
  </head>
  <body>
    <header id="header-main">
      <nav id="navbar">
        <div>
          <a id="name" href="/Tugas1-sem3">Contact Form</a>
        </div>
      </nav>
    </header>
    <main>
      <section id="contact">
        <div id="contact-main">
          <header>
            <h2 id="contact-title">Contact Form</h2>
          </header>
          <div id="contact-form">
            <form action="process.php" method="post">
              <div id="input">
                <label for="inputNameForm" id="label">Nama :</label>
                <input id="inputNameForm" name="inputNameForm" type="text" minlength="1" placeholder="Nama" required />
              </div>
              <div id="input">
                <label for="inputNimForm" id="label">NIM :</label>
                <input id="inputNimForm" name="inputNimForm" type="text" pattern="^(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$" placeholder="NIM" required minlength="10" />
              </div>
              <div id="input">
                <label for="kelas" id="label">Kelas :</label>
                <select name="kelas" id="kelas" required>
                  <option value="">Pilih Kelas</option>
                  <option value="T3A">T3A</option>
                  <option value="T3B">T3B</option>
                  <option value="T3C">T3C</option>
                  <option value="T3D">T3D</option>
                  <option value="T3E">T3E</option>
                  <option value="T3F">T3F</option>
                  <option value="T3G">T3G</option>
                  <option value="T3H">T3H</option>
                </select>
              </div>
              <div id="inputGender">
                <label id="label">Gender :</label>
                <div id="gender">
                  <input type="radio" pattern="^(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$" id="radioMale" name="gender" value="male" required /> Male
                  <input type="radio" pattern="^(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$" id="radioFemale" name="gender" value="female" required /> Female
                </div>
              </div>
              <div id="input">
                <label for="inputEmailForm" id="label">Email :</label>
                <input id="inputEmailForm" name="inputEmailForm" type="email" placeholder="example@gmail.com" required />
              </div>
              <div id="inputPesan">
                <label for="Message" id="label">Message :</label>
                <textarea id="Message" pattern="^(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$" minlength="1" name="Message" placeholder="Message" required></textarea>
              </div>
              <button id="btn-submit" type="submit">Send</button>
            </form>
          </div>
        </div>
      </section>
    </main>
    <footer id="footer">
      <div id="footer-main">
        <p id="footer-text">© 2024 <a>Surya Alam</a></p>
      </div>
    </footer>
  </body>
</html>
