
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">


    <title>MENU</title>
</head>

<body>

  <nav>
    <a href="ventes.html"><img src="img/resto.jpg" alt="logo" width="50" height="50"></a>
    <a style="font-family:alice">MENU</a>
    <a href="profil.html"><img src="img/utilisateur.png" alt="logo profile" width="50" height="50"></a>
  </nav>

    <div class="contentbox">
        <div class="order-container">
            <h2>Mes Commandes</h2>
            <ul class="order-list">
              <!-- Produit -->
              <li class="order-item">
                <div class="order-info">
                  <span class="order-id">Thé matcha du Japon</span>
                  <span class="order-status">Status: En cours de Livraison</span>
                </div>
                <div class="order-actions">
                    <a class="button" href="#popup0"><button class="action-btn">Plus</button></a>
                  <button class="action-btn">Commander à nouveaux</button>
                </div>
              </li>
              <!-- Produit 2 -->
              <li class="order-item">
                <div class="order-info">
                  <span class="order-id">matcha bio Saemidori 50g</span>
                  <span class="order-status">Status: Livré</span>
                </div>
                <div class="order-actions">
                    <a class="button" href="#popup1"><button class="action-btn">Plus</button></a>
                  <button class="action-btn">Commander à nouveaux</button>
                </div>
              </li>
              <!-- Produit 3 -->
              <li class="order-item">
                <div class="order-info">
                  <span class="order-id">Matcha HINATA Legendaire Bio par Takeshi-san</span>
                  <span class="order-status">Status: Livré</span>
                </div>
                <div class="order-actions">
                    <a class="button" href="#popup2"><button class="action-btn">Plus</button></a>
                  <button class="action-btn">Commander à nouveaux</button>
                </div>
              </li>
              <li class="order-item">
                <div class="order-info">
                  <span class="order-id">matcha de cérémonie samidori bio 30g</span>
                  <span class="order-status">Status: Livré</span>
                </div>
                <div class="order-actions">
                    <a class="button" href="#popup3"><button class="action-btn">Plus</button></a>
                  <button class="action-btn">Commander à nouveaux</button>
                </div>
              </li>
              <li class="order-item">
                <div class="order-info">
                  <span class="order-id">Coffret matcha</span>
                  <span class="order-status">Status: Livré</span>
                </div>
                <div class="order-actions">
                    <a class="button" href="#popup4"><button class="action-btn">Plus</button></a>
                  <button class="action-btn">Commander à nouveaux</button>
                </div>
              </li>
              <li class="order-item">
                <div class="order-info">
                  <span class="order-id">matcha bio Saemidori 50g</span>
                  <span class="order-status">Status: Livré</span>
                </div>
                <div class="order-actions">
                    <a class="button" href="#popup5"><button class="action-btn">Plus</button></a>
                  <button class="action-btn">Commander à nouveaux</button>
                </div>
              </li>
              <li class="order-item">
                <div class="order-info">
                  <span class="order-id">Thé matcha du Japon</span>
                  <span class="order-status">Status: Livré</span>
                </div>
                <div class="order-actions">
                    <a class="button" href="#popup6"><button class="action-btn">Plus</button></a>
                  <button class="action-btn">Commander à nouveaux</button>
                </div>
              </li>
              <li class="order-item">
                <div class="order-info">
                  <span class="order-id">Thé matcha du Japon</span>
                  <span class="order-status">Status: Livré</span>
                </div>
                <div class="order-actions">
                    <a class="button" href="#popup7"><button class="action-btn">Plus</button></a>
                  <button class="action-btn">Commander à nouveaux</button>
                </div>
              </li>
            </ul>
          </div>
          <div id="popup0" class="overlay">
            <div class="popup">
                <div class="contact-form">
                <img src="img/1.jpg" alt="matcha">
                <a class="close" href="#">&times;</a>
                <div class="contents">
                    Le produit phare de Kumiko Matcha, c'est le top du thé matcha premium bio, récolté sur l'île de Kyushu et produit d'un assemblage par le maître de chai. Idéal pour débuter !
                </div>
            </div>
          </div>
        </div>
        <div id="popup1" class="overlay">
            <div class="popup">
                <div class="contact-form">
                <img src="img/2.jpg" alt="matcha">
                <a class="close" href="#">&times;</a>
                <div class="contents">
                  Un mélange savoureux de matcha et de lait crémeux pour un moment de douceur.
                </div>
            </div>
          </div>
        </div>
        <div id="popup2" class="overlay">
            <div class="popup">
                <div class="contact-form">
                <img src="img/3.jpg" alt="matcha">
                <a class="close" href="#">&times;</a>
                <div class="contents">
                  Le matcha idéal pour les cérémonies traditionnelles japonaises.
                </div>
            </div>
          </div>
        </div>
        <div id="popup3" class="overlay">
            <div class="popup">
                <div class="contact-form">
                <img src="img/4.jpg" alt="matcha">
                <a class="close" href="#">&times;</a>
                <div class="contents">
                  Un thé matcha riche et velouté pour les amateurs exigeants.
                </div>
            </div>
          </div>
        </div>
        <div id="popup4" class="overlay">
            <div class="popup">
                <div class="contact-form">
                <img src="img/5.jpg" alt="matcha">
                <a class="close" href="#">&times;</a>
                <div class="contents">
                  Parfait pour des boissons glacées au thé matcha. !
                </div>
            </div>
          </div>
        </div>
        <div id="popup5" class="overlay">
            <div class="popup">
                <div class="contact-form">
                <img src="img/6.jpg" alt="matcha">
                <a class="close" href="#">&times;</a>
                <div class="contents">
                  Un mélange unique de thé matcha et d'épices.
                </div>
            </div>
          </div>
        </div>
        <div id="popup6" class="overlay">
            <div class="popup">
                <div class="contact-form">
                <img src="img/7.jpg" alt="matcha">
                <a class="close" href="#">&times;</a>
                <div class="contents">
                  Le thé matcha pour des moments de pure détente.                
                </div>
            </div>
          </div>
        </div>
        <div id="popup7" class="overlay">
            <div class="popup">
                <div class="contact-form">
                <img src="img/8.jpg" alt="matcha">
                <a class="close" href="#">&times;</a>
                <div class="contents">
                    Le produit phare de Kumiko Matcha, c'est le top du thé matcha premium bio, récolté sur l'île de Kyushu et produit d'un assemblage par le maître de chai. Idéal pour débuter !
                </div>
            </div>
          </div>
        </div>
    </div>
        
    
</div>
<footer>
  <div class="footer-container">
    
    <footer>
        <div class="footer-container">
            <!-- Navigation --> 
            <div class="footer-nav">
            </div>
            <!-- Carte -->
            <div class="footer-card">
                <a href="ventes.html"><img src="img/logo.jpg" alt="logo vente"></a>
            </div>
            <!-- Copyright -->
            <div class="footer-copyright">
              <p>&copy; La plateforme - 2025</p>
              <p>Magali Vacher</p>
              <p>Anna Marras</p>
              <p>Jeffry Khalife</p>
          </div>
        </div>
      </footer>
      </body> 
      </html>    