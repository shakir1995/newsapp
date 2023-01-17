<div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                  <h3>Admin Add Tag</h3>

                  <a href="{{ route('admin.tags') }}" class="btn btn-primary">All Tag</a>

                 @if (Session::has('message'))

                 <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                     
                 @endif
                    <form wire:submit.prevent="UpdateTag" >
                       
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tag Name</label>
                          <input type="text" class="form-control"  name="name" placeholder="Category Name" wire:model="name" wire:keyup="generateSlug" >
                         @error('name')
                           <p class="text-danger">{{ $message }}</p>
                         @enderror
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Tag Slug</label>
                          <input type="text" class="form-control" name="slug"  placeholder="Category Slug" wire:model="slug">
                          @error('slug')
                          <p class="text-danger">{{ $message }}</p>
                        @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1"> Status</label>
                            <select class="form-control" name="status" wire:model="status">
                             <option value="0">Select Please</option>
                             <option value="1">Yes</option>
                             <option value="0">No</option>
                            </select>

                            @error('status')
                            <p class="text-danger">{{ $message }}</p>
                          @enderror
                          </div>
                       
                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>
                </div>

     

               
            </div>
        </div>
    </div>
</div>
