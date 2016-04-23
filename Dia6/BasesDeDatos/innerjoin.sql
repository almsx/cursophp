SELECT 
    noticiasBlog.idNoticia,
    noticiasBlog.fechaPublicacion,
    noticiasBlog.tituloPublicacion,
    noticiasBlog.resumenPublicacion, 
    noticiasBlog.publicacionCompleta, 
    noticiasBlog.usuarioPublica,
    noticiasBlog.categoriaPublica,
    noticiasBlog.idNoticia,
    categoriasBlog.idCategoria,
    categoriasBlog.nombreCategoria,
    usuariosBlog.idUsuario, 
    usuariosBlog.nombres,
    usuariosBlog.pais,
    usuariosBlog.apPaterno,
    usuariosBlog.apMaterno

FROM noticiasBlog

LEFT JOIN usuariosBlog ON noticiasBlog.usuarioPublica = usuariosBlog.idUsuario 
LEFT JOIN categoriasBlog ON noticiasBlog.categoriaPublica = categoriasBlog.idCategoria