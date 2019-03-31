
function openModalUpdate(anuncio) {
  let id = $( anuncio ).attr("data-idanuncio");
  updateAnuncio(anuncio, id);
  $("#updateAnuncioModal").modal('show');
}

//====================================================================================================

function updateAnuncio(anuncio, id) {
  let titulo = $( anuncio ).attr("data-titulo");
  let descricao = $( anuncio ).attr("data-descricao");
  let responsabilidades = $( anuncio ).attr("data-responsabilidades");
  let competencias = $( anuncio ).attr("data-competencias");
  let fotoName = $( anuncio ).attr("data-fotoName");

  $("input[name='anuncioTituloUpdate']").val(titulo);
  $("textarea[name='anuncioDescriptionUpdate']").val(descricao);

  $("#anuncioResponsabilidadeUpdateId").append(
    "<label for='anuncioResponsabilidadeUpdate' class='desc-title'>Responsabilidades</label>"+
    "<input value='"+responsabilidades+"' id='anuncioResponsabilidadeUpdate' name='anuncioResponsabilidadeUpdate' type='hidden' name='content'>"+
    "<trix-editor input='anuncioResponsabilidadeUpdate'></trix-editor>"
  );

  $("#anuncioCompetenciasUpdateId").append(
    "<label for='anuncioCompetenciasUpdate' class='desc-title'>Competências/Experiências</label>"+
    "<input value='"+competencias+"' id='anuncioCompetenciasUpdate' name='anuncioCompetenciasUpdate' type='hidden' name='content'>"+
    "<trix-editor input='anuncioCompetenciasUpdate'></trix-editor>"+
    "<input value='"+id+"' id='idUpdateAnuncio' name='idUpdateAnuncio' type='hidden'>"+
    "<input value='"+fotoName+"' id='currentFotoName' name='currentFotoName' type='hidden'>"
  );
}

//====================================================================================================
function closeModal() {
  $(".modal").modal('hide');
  $( "#update--modal" ).remove();
  $( ".modal-backdrop" ).remove();
  location.reload();
}
