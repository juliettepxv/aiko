/**
 *
 * Ce fichier appelé depuis webpack importe tous les fichiers svg
 *
 */
function requireAll(r) {
    r.keys().forEach(r);
}
setTimeout(function(){
    requireAll(
        require.context('../../project', true, /svg-collection(.*)\.svg$/)
    );
},1000 * 5);


