# hkm-plugin-school-documents

> Solves **`school.documents`** · namespace **`Plugins\SchoolDocuments\`** · on-demand GDA module
> Family: Elimu / school domain

School, student, teacher and staff documents with numbering counters and an access log.

## Status

**Scaffold.** The domain is declared and the contract is published, but no use
case is implemented yet. `SchoolDocumentsContract` is deliberately empty — methods are added
one per ported use case.

## Where it comes from

| | |
|---|---|
| Legacy source | `documents/, school_documents, student_documents.php, staff_documents, teacher_documents` |
| Legacy tables | `school_documents, school_document_files, school_document_log, school_document_counters, student_documents, teacher_documents, staff_documents` |

The port plan, the reconstructed domain model and the per-plugin recipe live in
the **ElimuSystem** repository: `PORT-PLAN.md` and `PLUGIN-PLAN.md`.

## Requires

- `database.management`
- `storage.local`
- `audit.trail`
- `school.directory`

Declared as module **domains**, never port or contract class names. An unknown
domain fails the boot.

## Using it

```jsonc
// the consumer's module.json / proj.json
{ "requires": ["school.documents"] }
```

```php
$svc = $container->make(\Plugins\SchoolDocuments\API\Contracts\SchoolDocumentsContract::class);
```

## Installing

```bash
hkm plugins enable SchoolDocuments <project>
```
