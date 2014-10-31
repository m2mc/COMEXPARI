// Récupère le div qui contient la collection de tags
var collectionHolder = $('ul.tags');

// ajoute un lien « add a tag »
var $addTagLink = $('<a href="#" class="add_tag_link">Ajouter un tag</a>');
var $newLinkLi = $('<li></li>').append($addTagLink);

function addTagForm(collectionHolder, $newLinkLi) {
    // Récupère l'élément ayant l'attribut data-prototype comme expliqué plus tôt
    var prototype = collectionHolder.attr('data-prototype');

    // Remplace '__name__' dans le HTML du prototype par un nombre basé sur
    // la longueur de la collection courante
    var newForm = prototype.replace(/__name__/g, collectionHolder.children().length);

    // Affiche le formulaire dans la page dans un li, avant le lien "ajouter un tag"
    var $newFormLi = $('<li></li>').append(newForm);
    $newLinkLi.before($newFormLi);
    // ajoute un lien de suppression au nouveau formulaire
    addTagFormDeleteLink($newFormLi);
}

function addTagFormDeleteLink($tagFormLi) {
    var $removeFormA = $('<a href="#">Supprimer ce tag</a>');
    $tagFormLi.append($removeFormA);

    $removeFormA.on('click', function(e) {
        // empêche le lien de créer un « # » dans l'URL
        e.preventDefault();

        // supprime l'élément li pour le formulaire de tag
        $tagFormLi.remove();
    });
}

jQuery(document).ready(function() {
	// ajoute un lien de suppression à tous les éléments li de
    // formulaires de tag existants
    collectionHolder.find('li').each(function() {
        addTagFormDeleteLink($(this));
    // ajoute l'ancre « ajouter un tag » et li à la balise ul
    collectionHolder.append($newLinkLi);

    $addTagLink.on('click', function(e) {
        // empêche le lien de créer un « # » dans l'URL
        e.preventDefault();

        // ajoute un nouveau formulaire tag (voir le prochain bloc de code)
        addTagForm(collectionHolder, $newLinkLi);
    });
});