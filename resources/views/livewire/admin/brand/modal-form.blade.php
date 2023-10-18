



<div wire:ignore.self class="modal fade" id="addBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Brands</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

   <form wire:submit.prevent="storeBrand">
   <div class="modal-body">
    <div class="mb-3">
      <label>Select Category:</label>
      <select wire:model.defer="category_id"  required class="form-control">
<option value="">--Select Category--</option>
@foreach ($categories as $cateItem)
<option value="{{ $cateItem->id }}">{{ $cateItem->name }}</option>
@endforeach

      </select>
      @error('category_id') <small class="text-danger">{{ $message }}</small> @enderror
</div>
    <div class="mb-3">
        <label>Brand Name</label>
        <input type="text" wire:model.defer="name" class="form-control">
        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
</div>   
 <div class="mb-3">
        <label>Brand Slug</label>
        <input type="text" wire:model.defer="slug" class="form-control">
        @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
</div>
 <div class="mb-3">
        <label>Status</label> <br/>
        <input type="checkbox" wire:model.defer="status" class="form-control" /> Checked=Hidden, Un-Checked= Visisble
        @error('status') <small class="text-danger">{{ $message }}</small> @enderror
</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>


    </div>
  </div>
</div>

<!-- brand modal -->
<div wire:ignore.self class="modal fade" id="updateBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Brands</h1>
        <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

   <form wire:submit.prevent="updateBrand">
   <div class="modal-body">
   <div class="mb-3">
      <label>Select Category:</label>
      <select wire:model.defer="category_id"  required class="form-control">
<option value="">--Select Category--</option>
@foreach ($categories as $cateItem)
<option value="{{ $cateItem->id }}">{{ $cateItem->name }}</option>
@endforeach

      </select>
      @error('category_id') <small class="text-danger">{{ $message }}</small> @enderror
</div>
    <div class="mb-3">
        <label>Brand Name</label>
        <input type="text" wire:model.defer="name" class="form-control">
        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
</div>   
 <div class="mb-3">
        <label>Brand Slug</label>
        <input type="text" wire:model.defer="slug" class="form-control">
        @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
</div>
 <div class="mb-3">
        <label>Status</label> <br/>
        <input type="checkbox" wire:model.defer="status" style="width:70px;height:70px" class="form-control" /> Checked=Hidden, Un-Checked= Visisble
        @error('status') <small class="text-danger">{{ $message }}</small> @enderror
</div>


      </div>
      <div class="modal-footer">
        <button type="button" wire:click="closeModal" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>


    </div>
  </div>
</div>


<!-- brand delete -->

<div wire:ignore.self class="modal fade" id="deleteBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Brands</h1>
        <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

   <form wire:submit.prevent="destroyBrand">
   <div class="modal-body">
<h4>Are you sure you want to delete this data ? </h4>


      </div>
      <div class="modal-footer">
        <button type="button" wire:click="closeModal" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Yes. Delete</button>
      </div>
      </form>


    </div>
  </div>
</div>
