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

## Using a centralized system to share code

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

Create MR/PR in your centralized system.

## Updating local repository

Is `git pull` and `git fetch` the same?

## Pull request (PR), Merge request (MR) and Issues

* What is the difference between a pull request (PR) and a merge request (MR)?
* What is the difference between a PR and an issue?

![pr.svg](img/pr.svg)

Demo of Github and Gitlab.

### [> Index](index.md)
