# Battle of the Laravel Admin Panels

### Spring, 2021

[Artisan TV](https://artisan-tv.com) is producing a series of videos evaluating the leading Laravel admin panels.
An advocate for each of the panels (the owner, a maintainer, or just a fan) will pair with
[Ed Grosvenor](https://github.com/edgrosvenor) on a one-hour live stream to walk through setting up the panel to work
with this application.

This application is a scaled down version of Artisan TV itself. It assumes that all videos are from YouTube (the real
site can handle videos from multiple providers) and lacks any user interface. There are three main models that we're
concerned with when evaluating an admin panel's CRUD functionality: User, Video, and Highlight. We also set up
[Spatie's tag package](https://github.com/spatie/laravel-tags) to see if any admin panel can help with managing that.
What makes that package tricky is that the model does not sit in `App\` or `App\Models`, but rather inside the directory
within the vendor folder.

### Pass / Fail Criteria

An admin panel will automatically fail if it is unable to do any of the following:

- [ ] Support Laravel 8
- [ ] Support PHP 8.0

### Evaluation Criteria

- [ ] Can quickly provide basic CRUD functionality for the primary tables.
- [ ] Can provide validation to ensure that video links are valid YouTube URLs.
- [ ] Effectively handles the relationships between users, videos, and highlights.
- [ ] Provides or facilitates tables, charts, graphs, or other data visualization.
- [ ] Allows for tag management
- [ ] Allows videos to be embedded easily within the panel
- [ ] Has good documentation
- [ ] Has responsive support

