@push('header')
<script src="{{ asset('vendor/vue/vue.global' . (!config('app.debug') ? '.prod' : '') . '.js') }}"></script>
<script src="{{ asset('vendor/vuedraggable/sortable.min.js') }}"></script>
<script src="{{ asset('vendor/vuedraggable/vuedraggable.umd.min.js') }}"></script>
@endpush

<div class="card variants-box mb-3" id="variants-box">
  <div class="card-header">
    <h5 class="card-title mb-0">属性</h5>
  </div>
  <div id="hide-attribute" class="card-body d-none">
     <table id="attributeTable" class="table table-condensed table-bordered">
       <tr class="set-attribute-title">
         <td>属性</td>
         <td>属性值</td>
         <td></td>
       </tr>
       <tr id ="AddTr" class="set-attribute-title">
         <td class="col-5"><input type="text" class="form-control" name="attribute[0][name]" placeholder="功能"></td>
         <td class="col-5"><input type="text" class="form-control" name="attribute[0][value]" placeholder="保暖"></td>
         <td id="delete-ROW-attribute" class="col-2 text-center align-middle "><a type="button" class="btn btn-lg"><i class="bi-treash">删除</i></a></td>
       </tr>
     </table>
     <a id="delete-All-attribute" class="button btn-primary">删除</a>
     <a id="add-attribute" class="button btn-primary">添加</a>
  </div>
  <div>
   <div>
     <a id="new-attribute" class="button btn-primary">添加属性</a>
   </div>
  </div>
  
</div>

@push('footer')
<script>
  $('#new-attribute').click(function() {
    $('#hide-attribute').removeClass('d-none');
  });
  $('#delete-attribute').click(function() {
    alert('删除属性');
    $('#hide-attribute').show('d-none');
  });

  $(document).ready(function() {
    $('#add-attribute').click(function() {
      let lineNo=1; 
      markup = '<tr class="add-tr">\
         <td class="col-5"><input type="text" class="form-control" name="attribute[0][name]" placeholder="功能"></td>\
         <td class="col-5"><input type="text" class="form-control" name="attribute[0][value]" placeholder="保暖"></td>\
         <td class="add-attribut col-2 text-center align-middle "><a type="button" class="btn btn-lg"><i class="bi-flie-plus"></i>删除</a></td>\
       </tr>'; 
      tableBody = $("table tbody"); 
      tableBody.append(markup); 
      lineNo++; 
    });
  });
</script>
@endpush