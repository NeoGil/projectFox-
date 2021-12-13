import { Component } from '@angular/core';
import {GalleryService} from "./services/gallery.service";
import {Gallery} from "./Models/gallery";
import {PreloaderService} from "./services/preloaders/preloader.service";

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.sass']
})
export class AppComponent {
  title = 'ForGallery';

  gallery: Gallery[] | undefined;

  constructor(
    private coursesService: GalleryService,
    public preloaderService: PreloaderService
  ) { }

  ngOnInit(): void {

    this.coursesService.getGallery().subscribe((data) => {
      this.gallery = data;
    })
  }
}
