var photoArray = [];

class Photo {
  constructor(files, index) {
    this.obj = this.constructor.newPhoto();
    this.img = this.obj.find('.image-sq');
    this.select = false;

    this.biggerWidth(files, index).then(data => {
      // console.log(data);
      if (data.isBiggerWidth) {
        this.img.addClass('bigger-width');
      } else {
        this.img.addClass('bigger-height');
      }
      this.src = data.src;
    });
  }

  readURL(input) {
    return new Promise(res => {
      var reader = new FileReader();
      let that = this;
      reader.onload = function(e) {
        that.img.attr('src', e.target.result);
        let image = new Image();

        image.onload = function() {
          let bool = image.width >= image.height ? true : false;
          console.log(`bool = ${bool}`, image.width, image.height);
          res({
            isBiggerWidth: bool,
            src: image.src
          });
        };

        image.src = e.target.result;
      };

      reader.readAsDataURL(input);
    });
  }

  async biggerWidth(fileUpload, index) {
    let imageLoaded = await this.readURL(fileUpload.files[index]);
    return imageLoaded;
  }

  static newPhoto() {
    return $(
      `<div class="ui three wide computer six wide tablet six wide mobile column">

      <div class="photo-upload-item">
      <div class="image-wrapper">
      <img class="image-sq" alt="">
      </div>

      <a class="remove"><i class="icon icon-close"></i></a>
      <!-- <a href="" class="cover-photo-sq"><i class="icon icon-pin1"></i></a> -->

      <!-- <textarea  cols="30" rows="2" placeholder="What are the highlights of this photo?"></textarea> -->


      </div>
      </div>`
    );
  }

  static selected() {
    for (let i = 0; i < photoArray.length; ++i) {
      if (photoArray[i].select == true) {
        return {
          img: photoArray[i],
          exists: true
        };
      }
    }
    return {
      img: undefined,
      exists: false
    };
  }

  static fetchData() {
    let srcArray = [];
    let selected = Photo.selected().img ? Photo.selected().img.src : undefined;
    for (let i = 0; i < photoArray.length; ++i) srcArray.push(photoArray[i].src);
    return {
      srcArray,
      selected
    };
  }
}

Photo.prototype.addPhoto = function(fileUpload) {
  photoArray.push(this);
  this.obj.find('.image-wrapper').css('opacity', '0');
  let container = fileUpload.parent().parent().parent().prepend(this.obj);
  this.obj.find('.image-wrapper').velocity({
    opacity: 1
  }, {
    duration: 'fast',
    easing: 'ease-in-out'
  });
  return container;
}

Photo.prototype.removePhoto = function(event) {
  event.stopPropagation();
  let that = this;
  this.obj.find('.image-wrapper').parent().removeClass('selected').parent().velocity({
    opacity: 0,
  }, {
    display: 'none',
    duration: 'fast',
    complete: function() {
      that.obj.remove();
      that.obj = that.img = that.src = that.select = null;
      for (let i = 0; i < photoArray.length; ++i) {
        if (photoArray[i] == that) {
          photoArray.splice(i, 1);
          break;
        }
      }
    }
  });
}

Photo.prototype.selectPhoto = function() {
  let currentlySelected = Photo.selected();
  if (this.obj.find('.photo-upload-item').hasClass('selected')) {
    this.obj.find('.photo-upload-item').removeClass('selected');
    this.select = false;
  } else if (currentlySelected.exists) {
    currentlySelected.img.obj.find('.photo-upload-item').removeClass('selected');
    currentlySelected.img.select = false;
    this.obj.find('.photo-upload-item').addClass('selected');
    this.select = true;
  } else {
    this.obj.find('.photo-upload-item').addClass('selected');
    this.select = true;
  }
}
