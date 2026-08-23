# Presentation topics

## A simple view of Git

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

Git moves changes from your files into saved snapshots. Those snapshots can then
be shared with other people through a remote service such as GitHub or GitLab.



* [Basics mastered, now what](beyond_basic.md)
* [Branching and merging](branching.md)
* [Work flows](workflows.md)
* [Collaborating workflows](collaborating.md)
* [Problem-solving](problems.md)

### [> Home](../README.md)
