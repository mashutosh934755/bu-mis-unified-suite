# API Notes

## DSpace

Recommended endpoint pattern:

```text
/server/api/discover/search/objects?query=Thesis&scope=<scope-uuid>&size=100&page=0
```

Use browser-like headers if the DSpace server blocks simple script requests.

## OJS

Use the OJS API or public data source configured by the institution.

## Plagiarism

Recommended route placeholder:

```text
/wp-json/bu-plagiarism/v2
```

If `rest_no_route` occurs, verify that the source plugin has registered the route.
