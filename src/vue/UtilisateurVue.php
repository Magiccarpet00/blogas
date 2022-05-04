<?php

namespace blogapp\vue;

use blogapp\vue\Vue;

class UtilisateurVue extends Vue {
    const NOUVEAU_VUE = 1;
    
    public function render() {
        switch($this->selecteur) {
        case self::NOUVEAU_VUE:
            $content = $this->nouveau();
            break;
        }
        return $this->userPage($content);
    }

    public function nouveau() {
        return <<<YOP
        <form method="post" action="{$this->cont['router']->pathFor('util_cree')}">
          pseudo
          <input type="text" name="pseudo"><br>
          nom
          <input type="text" name="nom"><br>
          prenom
          <input type="text" name="prenom"><br>
          mail
          <input type="text" name="mail"><br>
          mot de passe
          <input type="password" name="mot de passe"><br>
          <input type="submit" value="Validation">
        </form>
YOP;
    }
}
