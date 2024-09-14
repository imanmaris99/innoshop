@push('header')
<script src="{{ asset('vendor/vue/vue.global' . (!config('app.debug') ? '.prod' : '') . '.js') }}"></script>
<script src="{{ asset('vendor/vuedraggable/sortable.min.js') }}"></script>
<script src="{{ asset('vendor/vuedraggable/vuedraggable.umd.min.js') }}"></script>
@endpush

<div class="card variants-box mb-3" id="variants-box">
  <div class="card-header">
    <h5 class="card-title mb-0">属性</h5>
  </div>
  <div>
   <div>
     <button id="add-newattribute">添加属性</button>
     <button id="delete-attribute" style="display: none;">删除属性</button>
   </div>
  </div>
  <div class="card-body" style="display: none;">
      <table id="attributeTable" class="table table-condensed table-bordered">
     <tr class="set-attribute-title">
      <td>属性</td>
      <td>属性值</td>
      <td></td>
     </tr>
     <tr class="set-attribute-title">
      <td class="col-5.5"><input type="text" class="form-control" name="attribute[0][name]" v-model="attribute.name" placeholder="功能"></td>
      <td class="col-5.5"><input type="text" class="form-control" v-model="attribute.name" placeholder="保暖"></td>
      <td class="col-1 text-center align-middle"><button type="button" class="btn btn-sm btn-primary" @click="addAttribute()">+</button></td>
     </tr>
      </table>
  </div>
</div>

@push('footer')
<script>
  document.getElementById('add-newattribute').addEventListener('click', function() {
  var table = document.getElementById('attributeTable');
  var delete-attribute = document.getElementById('delete-attribute');
  table.style.display = 'table'; // 显示表格
  delete-attribute.style.display = 'block'; // 显示删除按钮
  });
  document.getElementById('delete-attribute').addEventListener('click', function() {
  var table = document.getElementById('attributeTable');
  table.style.display = 'none'; // 隐藏表格
  this.style.display = 'none'; // 隐藏删除按钮
  });
</script>
@endpush