# Beyond basics

Git is a huge topic. Git is flexible, customizable, and very powerful. Most people will never learn everything about Git. Mostly because they do not have to.

Hundreds of thousens of tools support Git some way of another. People use Git to varius things, have varius workflows, company policies, programming languages, operating systems, and more. We wil mostly here cover the git command. The most important thing is to understand the how and the why when it comes to Git.

## Structure

```mermaid
flowchart LR
    files["Your files<br/>Edit your work"]
    staged["Ready to save<br/>git add"]
    history["Project history<br/>git commit"]

    files -->|Choose changes| staged
    staged -->|Save a snapshot| history
```

## Saving changes

* Git ignore (`.gitignore`)
* `git stash`

## Inspecting repository

* `git status` 
* `git log`
* `git blame`
* `git reflog`

## Undoing Commits & Changes

Git does not really have an undo function. That goes against the whole idea of version control.

`git revert` - safest way.
`git rm` is to remove tracked files from the Git index.

## Security

Git ignore (`.gitignore`)

### [> Index](index.md)
