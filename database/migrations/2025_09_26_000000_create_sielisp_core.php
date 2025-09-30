<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // USERS
        Schema::table('users', function (Blueprint $table) {
            $table->enum('role', ['candidat', 'admin', 'appariteur', 'percepteur'])
                ->default('candidat')
                ->after('password');
        });

        // ADMIN
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

        // AGENT APPARITORAT
        Schema::create('agent_apparitorats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('matricule')->nullable();
            $table->string('telephone')->nullable();
            $table->timestamps();
        });

        // AGENT PERCEPTEUR
        Schema::create('agent_percepteurs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('matricule')->nullable();
            $table->string('telephone')->nullable();
            $table->timestamps();
        });

        // DEPARTEMENT
        Schema::create('departements', function (Blueprint $table) {
            $table->id();
            $table->string('code', 20)->unique();
            $table->string('intitule');
            $table->timestamps();
        });

        // SECTION
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('departement_id')->constrained('departements')->cascadeOnDelete();
            $table->string('code', 20);
            $table->string('intitule');
            $table->timestamps();
            $table->unique(['departement_id', 'code']);
        });

        // OPTION
        Schema::create('options', function (Blueprint $table) {
            $table->id();
            $table->foreignId('section_id')->constrained('sections')->cascadeOnDelete();
            $table->string('code', 20);
            $table->string('intitule');
            $table->timestamps();
            $table->unique(['section_id', 'code']);
        });

        // CANDIDAT
        Schema::create('candidats', function (Blueprint $table) {
            $table->id();
            // Un candidat peut (ou pas) déjà avoir un compte utilisateur
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->string('nom');
            $table->string('postnom')->nullable();
            $table->string('prenom')->nullable();
            $table->date('date_naissance')->nullable();
            $table->string('adresse')->nullable();
            $table->string('telephone')->nullable();
            $table->string('matricule')->nullable(); // si réinscription
            $table->timestamps();
        });

        // DEMANDE D'INSCRIPTION
        Schema::create('demandes_inscription', function (Blueprint $table) {
            $table->id();
            $table->foreignId('candidat_id')->constrained('candidats')->cascadeOnDelete();
            $table->foreignId('option_id')->constrained('options')->cascadeOnDelete();
            $table->string('annee_academique', 9); // ex: 2024-2025
            $table->enum('type_inscription', ['nouveau', 'reinscription'])->default('nouveau');
            $table->enum('statut', ['brouillon', 'en_verif', 'valide', 'rejete'])->default('brouillon');
            $table->timestamp('submitted_at')->nullable();
            $table->timestamps();
            $table->unique(['candidat_id', 'annee_academique', 'option_id'], 'uniq_demande_par_annee_option');
        });

        // DOCUMENT ETUDIANT (attaché à une demande)
        Schema::create('documents_etudiants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('demande_id')->constrained('demandes_inscription')->cascadeOnDelete();
            $table->string('type_doc'); // carte_identite, diplome, photo, etc.
            $table->string('chemin_fichier'); // storage path
            $table->enum('statut', ['soumis', 'valide', 'rejete'])->default('soumis');
            $table->text('commentaire')->nullable();
            $table->timestamps();
        });

        // HISTORIQUE / AUDIT
        Schema::create('historiques', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->string('action'); // ex: "valider_document"
            $table->string('cible_type'); // morph type
            $table->unsignedBigInteger('cible_id');
            $table->json('metadata')->nullable(); // détails (IP, ancien/nouveau statut, etc.)
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('historiques');
        Schema::dropIfExists('documents_etudiants');
        Schema::dropIfExists('demandes_inscription');
        Schema::dropIfExists('candidats');
        Schema::dropIfExists('options');
        Schema::dropIfExists('sections');
        Schema::dropIfExists('departements');
        Schema::dropIfExists('agent_percepteurs');
        Schema::dropIfExists('agent_apparitorats');
        Schema::dropIfExists('admins');
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
        });
    }
};
