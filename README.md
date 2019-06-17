# Thursday Church Docs

Minisite for Thursday Church and related projects.

[Listing of all docs](/docs)


## Jekyll & GitHub Pages

This site relies on [recent updates to GitHub Pages](https://github.com/blog/2289-publishing-with-github-pages-now-as-easy-as-1-2-3)
or [the relevant Ruby Gems for local development](https://help.github.com/articles/setting-up-your-github-pages-site-locally-with-jekyll/#step-2-install-jekyll-using-bundler)
as well as the "v2" styling of [System76.com](https://system76.com).


## Other Notes

### File names

Docs are `.md` files in the `docs/` folder. Please dash-separate words in filenames `like-this.md`.


### Front Matter

Docs use [Front Matter](https://jekyllrb.com/docs/frontmatter/) to set some attributes. They'll fall back to something sane if omitted, but to prevent [duplicate titles](https://github.com/system76/pop-docs/issues/5), set the title at the top of the file:

```yaml
---
title: Foo
description: Bar baz bin qux
---
```

And then **don't** start the doc with a heading, as it will show up automatically. 

You should also set a description; this will show up on the [docs index](/docs/) page.


### Local Development

To run a local copy of the site to see changes without pushing, install Ruby, Nodejs, and Bundler (for more info, see [this GitHub Documentation](https://help.github.com/articles/setting-up-your-github-pages-site-locally-with-jekyll/)):

```shell
curl -sL https://deb.nodesource.com/setup_6.x | sudo -E bash - # Add stable NodeJS repo
sudo apt install -y build-essential nodejs ruby ruby-dev       # Install dev tools, NodeJS, and Ruby
sudo gem install bundler                                       # Install Bundler to manage site dependencies
```

Then run jekyll:

```shell
bundle exec jekyll serve # Run Jekyll with Bundler
```
