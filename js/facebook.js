// server.js
const express = require('express');
const passport = require('passport');
const FacebookStrategy = require('passport-facebook').Strategy;

// Configura Passport para usar la estrategia de Facebook
passport.use(new FacebookStrategy({
    clientID: '829051921923661',
    clientSecret: '0ebfd477f12396221ad0730ca5219c5a',
    callbackURL: "http://localhost:3000/auth/facebook/callback"
  },
  function(accessToken, refreshToken, profile, cb) {
    // Aquí deberías buscar al usuario en tu base de datos usando la información de 'profile'
    // Por simplicidad, este ejemplo simplemente devuelve el perfil
    return cb(null, profile);
  }
));

const app = express();

// Configura Express para usar Passport
app.use(passport.initialize());
app.use(passport.session());

// Rutas para la autenticación de Facebook
app.get('/auth/facebook',
  passport.authenticate('facebook'));

app.get('/auth/facebook/callback',
  passport.authenticate('facebook', { failureRedirect: '/login' }),
  function(req, res) {
    // Si la autenticación fue exitosa, redirige a la página de inicio
    res.redirect('../pages/pagina1.html');
  });

app.listen(3000);
