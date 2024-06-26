# Template sites prébuild de Delisoft

## RÉFÉRENCES

Voici quelques liens qui vous seront utiles

- [Bootstrap](https://getbootstrap.com/docs/5.3/getting-started/introduction/)
- [Webster](https://themes.potenzaglobalsolutions.com/html/webster-responsive-multi-purpose-html5-template/index-01.html)
- [FontAwesome](https://fontawesome.com/search?o=r&m=free)
- [Pseudo-elements FontAwsome](https://docs.fontawesome.com/web/add-icons/pseudo-elements)
- [Swiperjs](https://swiperjs.com/demos)
- [WebP Converter](https://webpconverter.com/)

<br><hr><br>

## Après avoir ouvert le projet

- `npm install` afin d'installer les dépendances (dossier node_modules)

## Tâches

Afin de démarrer le stack de développement, utilisez les commandes suivantes dans la console ou utilisez la tâche `start`

| Commandes disponibles | Description                                                                                                 |
|:----------------------| :---------------------------------------------------------------------------------------------------------- |
| `npm start`           | Génère un environnement de développement, démarre un serveur web et va attendre des changements de fichiers |
| `npm run build`       | Compile production code                                                                                     |

## Performances des images

- Utiliser des images compressées
- Mettre les images en .webp avec [WebP Converter](https://webpconverter.com/)
- Mettre loading="lazy" sur les images off-screen
- Preload les grosses images du slider dans le head
```
<link rel="preload" href="`Mettre le URL`" as="image">
```

## AI translate

- Installer la dernière version de Python 3.12
- Dans le terminal, faire les commandes : 
```
python -m pip install openai==0.28
python src/assets/lang/ai_translate_php.py
```

<br><br><br><hr>
Préparé à partir de timtools v1.3
<br>
qui a été créé par : Matthieu Parent et Jean-François Leblanc
<br>
et du thème Webster par potenzaglobalsolutions
<br>
Adapté par Raphaël Mailhiot
