<?php

declare(strict_types=1);

namespace Plugins\SchoolDocuments\API\Contracts;

/**
 * Published contract for `school.documents`.
 *
 * School, student, teacher and staff documents with numbering counters and an access log.
 *
 * Legacy source : documents/, school_documents, student_documents.php, staff_documents, teacher_documents
 * Legacy tables : school_documents, school_document_files, school_document_log, school_document_counters, student_documents, teacher_documents, staff_documents
 *
 * Consumers declare `"requires": ["school.documents"]` and resolve THIS interface.
 * Nothing outside this plugin may touch its internals — those are bound with
 * `bindInternal()` and throw `ScopeViolationException` cross-scope.
 *
 * @see docs/PORT.md in this repository for what still has to be ported.
 */
interface SchoolDocumentsContract
{
    // Methods are added as each legacy use case is ported. Keep this surface
    // minimal: one method per use case the OUTSIDE world needs, never a
    // pass-through to a repository.
}
