


class Search {
  // 1. describe and create/initiate our object
  constructor() {
    this.openButton = $(".js-search-trigger");
    this.closeButton = $(".search-overlay__close");
    this.searchOverlay = $(".search-overlay");
    this.events();
  }

  // 2. events
  events() {
    this.openButton.on("click", this.openOverlay.bind(this));
    this.closeButton.on("click", this.closeOverlay.bind(this));
  }
   

  // 3. methods (function, action...)
  openOverlay() {
    this.searchOverlay.addClass("search-overlay--active");
    $("body").removeClass("body-no-scroll");
  }

  closeOverlay() {
    this.searchOverlay.removeClass("search-overlay--active");
    $("body").removeClass("body-no-scroll");
  }
}

 var search=new Search();


 //this code is from {class 51} write excact code but not working. for this why I skip this lesson.

 skip classes are (52-54)




