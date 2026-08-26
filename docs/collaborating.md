# Collaborating workflows

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

## Using a sentral system to share code

```mermaid
flowchart TB
    shared[("Shared repository<br/>GitHub / GitLab")]

    subgraph team["The team"]
        direction LR
        alex["Alex<br/>Local copy"]
        blair["Blair<br/>Local copy"]
        casey["Casey<br/>Local copy"]
    end

    shared <-->|"pull and push"| alex
    shared <-->|"pull and push"| blair
    shared <-->|"pull and push"| casey
```


## Updating local repository

Is `git pull` and `git fetch` the same?


## Pull requests

![pr.svg](./img/pr.svg)

Demo of Github and Gitlab.

### [> Index](index.md)
