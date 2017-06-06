# encoding: UTF-8
# This file is auto-generated from the current state of the database. Instead
# of editing this file, please use the migrations feature of Active Record to
# incrementally modify your database, and then regenerate this schema definition.
#
# Note that this schema.rb definition is the authoritative source for your
# database schema. If you need to create the application database on another
# system, you should be using db:schema:load, not running all the migrations
# from scratch. The latter is a flawed and unsustainable approach (the more migrations
# you'll amass, the slower it'll run and the greater likelihood for issues).
#
# It's strongly recommended that you check this file into your version control system.

ActiveRecord::Schema.define(version: 20170602223025) do

  # These are extensions that must be enabled in order to support this database
  enable_extension "plpgsql"

  create_table "components", force: true do |t|
    t.string   "name",                limit: nil
    t.string   "slug",                limit: nil
    t.text     "description"
    t.string   "category",            limit: nil
    t.integer  "organization_id"
    t.text     "css"
    t.text     "js"
    t.text     "layout"
    t.text     "format"
    t.text     "gui_css"
    t.text     "gui_js"
    t.text     "gui_templates"
    t.text     "gui_controls"
    t.text     "gui_section_nav"
    t.text     "gui_help"
    t.text     "gui_example"
    t.text     "gui_footer"
    t.text     "gui_content_toolbar"
    t.text     "gui_header"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  add_index "components", ["category"], name: "index_components_on_category", using: :btree
  add_index "components", ["organization_id"], name: "index_components_on_organization_id", using: :btree
  add_index "components", ["slug", "organization_id"], name: "index_components_on_slug_and_organization_id", unique: true, using: :btree

  create_table "document_meta", force: true do |t|
    t.integer  "document_id"
    t.string   "key",                  limit: nil
    t.string   "value",                limit: nil
    t.string   "lms_organization_id",  limit: nil
    t.string   "lms_course_id",        limit: nil
    t.integer  "root_organization_id"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  create_table "documents", force: true do |t|
    t.string   "name",              limit: nil
    t.string   "edit_id",           limit: nil
    t.string   "view_id",           limit: nil
    t.text     "payload"
    t.datetime "created_at"
    t.datetime "updated_at"
    t.string   "template_id",       limit: nil
    t.integer  "organization_id"
    t.string   "lms_course_id",     limit: nil
    t.datetime "lms_published_at"
    t.integer  "component_id"
    t.integer  "component_version"
    t.string   "term_id",           limit: nil
  end

  add_index "documents", ["component_id"], name: "index_documents_on_component_id", using: :btree
  add_index "documents", ["edit_id"], name: "index_documents_on_edit_id", unique: true, using: :btree
  add_index "documents", ["lms_course_id"], name: "index_documents_on_lms_course_id", using: :btree
  add_index "documents", ["organization_id"], name: "index_documents_on_organization_id", using: :btree
  add_index "documents", ["template_id"], name: "index_documents_on_template_id", unique: true, using: :btree
  add_index "documents", ["term_id"], name: "index_documents_on_term_id", using: :btree
  add_index "documents", ["view_id"], name: "index_documents_on_view_id", unique: true, using: :btree

  create_table "organization_meta", force: true do |t|
    t.integer  "organization_id"
    t.string   "key",                 limit: nil
    t.string   "value",               limit: nil
    t.string   "lms_organization_id", limit: nil
    t.integer  "root_id"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  create_table "organizations", force: true do |t|
    t.string   "name",                      limit: nil
    t.string   "slug",                      limit: nil
    t.integer  "parent_id"
    t.integer  "lft"
    t.integer  "rgt"
    t.integer  "depth"
    t.datetime "created_at"
    t.datetime "updated_at"
    t.string   "lms_authentication_source", limit: nil
    t.string   "lms_authentication_id",     limit: nil
    t.string   "lms_authentication_key",    limit: nil
    t.string   "lms_info_slug",             limit: nil
    t.string   "lms_id",                    limit: nil
    t.datetime "dashboard_start_at"
    t.datetime "dashboard_end_at"
    t.string   "home_page_redirect",        limit: nil
    t.json     "default_account_filter"
    t.boolean  "skip_lms_publish"
  end

  add_index "organizations", ["depth"], name: "index_organizations_on_depth", using: :btree
  add_index "organizations", ["lft"], name: "index_organizations_on_lft", using: :btree
  add_index "organizations", ["lms_id"], name: "index_organizations_on_lms_id", using: :btree
  add_index "organizations", ["parent_id"], name: "index_organizations_on_parent_id", using: :btree
  add_index "organizations", ["rgt"], name: "index_organizations_on_rgt", using: :btree
  add_index "organizations", ["slug", "parent_id"], name: "index_organizations_on_slug_and_parent_id", unique: true, using: :btree

  create_table "que_jobs", id: false, force: true do |t|
    t.integer  "priority",    limit: 2, default: 100, null: false
    t.datetime "run_at",                              null: false
    t.integer  "job_id",      limit: 8,               null: false
    t.text     "job_class",                           null: false
    t.json     "args",                  default: [],  null: false
    t.integer  "error_count",           default: 0,   null: false
    t.text     "last_error"
    t.text     "queue",                 default: "",  null: false
  end

  create_table "report_archives", force: true do |t|
    t.text     "payload"
    t.datetime "generating_at"
    t.integer  "organization_id"
    t.datetime "created_at"
    t.datetime "updated_at"
    t.json     "report_filters"
  end

  add_index "report_archives", ["organization_id"], name: "index_report_archives_on_organization_id", using: :btree

  create_table "templates", force: true do |t|
    t.string   "slug",            limit: nil
    t.text     "payload"
    t.integer  "organization_id"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  add_index "templates", ["slug", "organization_id"], name: "index_templates_on_slug_and_organization_id", unique: true, using: :btree

  create_table "terms", force: true do |t|
    t.string   "slug",            limit: nil
    t.string   "name",            limit: nil
    t.integer  "organization_id"
    t.datetime "start_date"
    t.integer  "duration"
    t.string   "cycle",           limit: nil
    t.integer  "sequence"
    t.boolean  "is_default"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  add_index "terms", ["slug", "organization_id"], name: "index_terms_on_slug_and_organization_id", unique: true, using: :btree

  create_table "user_assignments", force: true do |t|
    t.integer "user_id"
    t.integer "organization_id"
    t.string  "username",        limit: nil
    t.boolean "cascades"
    t.string  "role",            limit: nil
  end

  create_table "users", force: true do |t|
    t.string   "name",              limit: nil
    t.datetime "created_at"
    t.datetime "updated_at"
    t.string   "email",             limit: nil
    t.string   "password_digest"
    t.string   "remember_digest"
    t.string   "activation_digest"
    t.boolean  "activated"
    t.datetime "activated_at"
    t.string   "reset_digest"
    t.datetime "reset_sent_at"
  end

  add_index "users", ["email"], name: "index_users_on_email", unique: true, using: :btree

  create_table "versions", force: true do |t|
    t.integer  "versioned_id"
    t.string   "versioned_type", limit: nil
    t.integer  "user_id"
    t.string   "user_type",      limit: nil
    t.string   "user_name",      limit: nil
    t.text     "modifications"
    t.integer  "number"
    t.integer  "reverted_from"
    t.string   "tag",            limit: nil
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  add_index "versions", ["created_at"], name: "index_versions_on_created_at", using: :btree
  add_index "versions", ["number"], name: "index_versions_on_number", using: :btree
  add_index "versions", ["tag"], name: "index_versions_on_tag", using: :btree
  add_index "versions", ["user_id", "user_type"], name: "index_versions_on_user_id_and_user_type", using: :btree
  add_index "versions", ["user_name"], name: "index_versions_on_user_name", using: :btree
  add_index "versions", ["versioned_id", "versioned_type"], name: "index_versions_on_versioned_id_and_versioned_type", using: :btree

end
