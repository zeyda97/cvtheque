<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
       <i class="nav-icon fas fa-users"></i>
        <p>Utilisateurs</p>
    </a>
</li>


{{-- <li class="nav-item">
    <a href="{{ route('roles.index') }}"
       class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
        <p>Role</p>
    </a>
</li> --}}
<li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Configuration
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="{{ route('roles.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Roles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('genres.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Genres</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('nationalites.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nationalités</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('situationMatrimoniales.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Situation Matrimoniales</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('regionResidences.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Région de Résidence</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('departementResidences.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Département de résidences</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('communeResidences.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Commune de Résidence</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('statuts.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Statuts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('typeMetiers.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Type de Métiers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('typeCandidatures.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Type de Candidatures</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('adresses.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Adresse</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('langues.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Langues</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('typeExperiences.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Type D'Experiences</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('postes.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Postes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('justificatifs.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Justificatifs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('competences.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compétences</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('formations.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Formations</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('experiences.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Expériences</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('niveauxes.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Niveau</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('motifContrats.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Motif de Contrat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('objetContrats.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Objet de Contrat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('typeJustificatifs.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Type de Justificatifs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('fiches.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fiches</p>
                </a>
              </li>
            </ul>
          </li>

<li class="nav-item">
    <a href="{{ route('candidats.index') }}"
       class="nav-link {{ Request::is('candidats*') ? 'active' : '' }}">
       <i class="nav-icon fas fa-user"></i>
        <p>Candidats</p>
    </a>
</li>




