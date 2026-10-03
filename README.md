# Thème WordPress Les Scouts

## Présentation

Ce projet est une adaptation WordPress du template officiel mis à disposition par Les Scouts ASBL.

L'objectif est de permettre à une unité scoute de déployer rapidement un site WordPress respectant la charte graphique officielle des Scouts tout en bénéficiant des fonctionnalités natives de WordPress :

- gestion des articles et actualités ;
- catégories et archives ;
- menus de navigation ;
- widgets et sidebars ;
- images mises en avant ;
- templates WordPress personnalisés ;
- personnalisation via Gutenberg ;
- responsive design basé sur Bootstrap 5.

Ce projet est actuellement utilisé par l'Unité Les Belles Pierres (RP041).

---

## Crédits

### Charte graphique et ressources visuelles

Le design original, la charte graphique, les illustrations, les polices et les logos sont issus du projet officiel des Scouts ASBL :

https://github.com/lesscouts/template-unite

Ces éléments restent la propriété des Scouts ASBL et sont soumis à leurs conditions d'utilisation.

### Adaptation WordPress

Intégration WordPress, développement des templates PHP, personnalisation et maintenance :

**Fabian Hiernaux**

https://www.hiernaux.be

### Principales adaptations apportées

- Intégration complète du template HTML/CSS dans WordPress
- Création des templates WordPress
- Gestion des catégories et archives
- Gestion des widgets et sidebars
- Intégration des images mises en avant
- Création des pages d'actualités
- Intégration des réseaux sociaux
- Améliorations ergonomiques et graphiques
- Support de Gutenberg et des blocs personnalisés

---

## Installation

### Prérequis

- WordPress 6.x ou supérieur
- PHP 8.x recommandé
- Extensions PHP standard activées

### Installation du thème

Copiez le dossier du thème dans :

```text
wp-content/themes/
```

Vous devez obtenir :

```text
wp-content/themes/scout_unite_template
```

Ensuite :

```text
Administration WordPress
→ Apparence
→ Thèmes
→ Activer le thème
```

---

## Configuration initiale

### Menus

Créer et associer les menus nécessaires :

```text
Apparence
→ Menus
```

Menu principal :

- Accueil
- Notre unité
- Actualités
- Ressources
- Contact

---

### Page d'accueil et blog

Configurer :

```text
Réglages
→ Lecture
```

Définir :

- une page statique comme page d'accueil ;
- une page dédiée aux actualités.

---

### Widgets

Configurer les zones de widgets :

```text
Apparence
→ Widgets
```

Zones disponibles :

- Sidebar principale
- Footer Area One
- Footer Area Two
- Footer Area Three

---

### Images à la une

Pour obtenir un affichage optimal des actualités :

```text
Articles
→ Image mise en avant
```

Ajouter une image pour chaque publication.

---

## Catégories recommandées

Le thème adapte automatiquement l'apparence des archives selon certaines catégories.

| Catégorie | Décoration |
|------------|------------|
| Baladins | topping-baladins |
| Louveteaux | topping-louveteaux |
| Éclaireurs | topping-eclaireurs |
| Pionniers | topping-pionniers |
| Unité | topping-federation |

---

## Classes CSS additionnelles

Le thème utilise plusieurs classes personnalisées destinées aux blocs Gutenberg :

### Encadré standard

```text
sc-highlight-box
```

### Encadré bleu

```text
sc-highlight-box-blue
```

### Mise en avant verte

```text
sc-highlight-box-callout
```

### Mise en avant bleue

```text
sc-highlight-box-callout-blue
```

### Carte illustrée

```text
sc-highlight-card
```

### Lien mis en valeur

```text
sc-highlight-link
```

Utilisation :

```text
Bloc Gutenberg
→ Avancé
→ Classe CSS supplémentaire
```

---

## Personnalisation

Le thème peut être personnalisé via :

- CSS additionnel ;
- widgets ;
- menus ;
- blocs Gutenberg ;
- templates WordPress ;
- classes CSS personnalisées.

Les personnalisations peuvent être réalisées sans modifier la charte graphique officielle des Scouts.

---

## Contribuer

Les contributions sont les bienvenues :

- amélioration des templates WordPress ;
- amélioration de la documentation ;
- corrections de bugs ;
- amélioration de l'accessibilité ;
- amélioration du responsive mobile.

---

## Licences

### Projet original

Le code CSS et la documentation du template original sont diffusés par Les Scouts ASBL selon leurs licences respectives.

### Adaptation WordPress

Les développements spécifiques à cette adaptation WordPress sont distribués sous licence MIT sauf mention contraire.

### Ressources graphiques

Les logos, illustrations, photos et éléments graphiques issus du projet Les Scouts restent soumis aux droits et conditions d'utilisation définis par Les Scouts ASBL.
