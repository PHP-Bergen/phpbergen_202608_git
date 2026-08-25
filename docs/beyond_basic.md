# Beyond basics

Git is a huge topic. Git is flexible, customizable, and very powerful. Most people will never learn everything about Git. Mostly it is because they do not need to.  

## Structure

```mermaid
flowchart LR
    files["Your files<br/>Edit your work"]
    staged["Ready to save<br/>git add"]
    history["Project history<br/>git commit"]
    remote["Shared copy<br/>GitHub / GitLab"]

    files -->|Choose changes| staged
    staged -->|Save a snapshot| history
    history -->|Share commits| remote
    remote -->|Get others' commits| history
```

## Saving changes

* Git ignore (`.gitignore`)
* Git stash

## Inspecting (

* `git status` 
* `git log`
* `git blame`
* `git reflog`

## Undoing Commits & Changes


## Security

Git ignore (`.gitignore`)

## Automation

### Git hooks

client-side:
```txt
pre-commit
prepare-commit-msg
commit-msg
post-commit

post-checkout
pre-rebase
```

server-side:
```
pre-receive
update
post-receive
```

### [> Index](index.md)
